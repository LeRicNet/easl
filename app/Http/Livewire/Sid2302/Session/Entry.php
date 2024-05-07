<?php

namespace App\Http\Livewire\Sid2302\Session;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene2;

use Illuminate\Support\Str;

class Entry extends Component
{
    
    public string $userFirstName;
    public string $userLastName;
    public string $userEmail;
    public string $userGender;
    public string $userSubspecialty;
    public string $userInstitution;
    public int $userMdYear;

    public $session;
    public $sessionID;

    public $debugvar = 1;

    protected $rules = [
        'userFirstName' => 'required|string',
        'userLastName' => 'required|string',
        'userEmail' => 'required|email',
        'userGender' => 'required|string',
        'userSubspecialty' => 'required|string',
        'userInstitution' => 'required|string',
        'userMdYear' => 'required|int'
    ];

    public function mount()
    {
        $session = new ActiveSession;
        $this->userSubspecialty = 'none';
        $this->userInstitution = 'none';
        $this->userEmail = '';
        $this->userGender = '';
        $this->userFirstName = '';
        $this->userLastName = '';
        $this->userMdYear = 1900;

        $this->sessionID = $this->uniqidReal();
        Scene2::insert([
            'sessionID' => $this->sessionID,
            'scene' => 'consent',
            'started' => date('Y-m-d H:i:s', time())
        ]);
    }
        
    public function makeUserID()
    {
        // Store the cipher method
        $ciphering = "AES-128-CTR";

        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;

        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';

        // Store the encryption key
        $encryption_key = "johnelway";

        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($this->userLastName, $ciphering,
            $encryption_key, $options, $encryption_iv);

        return $encryption;
    }

    public function makeSessionID()
    {
        // Store the cipher method
        $ciphering = "AES-128-CTR";

        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;

        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';

        // Store the encryption key
        $encryption_key = "denverbroncos";

        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($this->userLastName, $ciphering,
            $encryption_key, $options, $encryption_iv);

        return $encryption;
    }

    public function uniqidReal($length = 13) {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($length / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $length);
    }

    public function submit()
    {
//        $this->validate();
    }

    public function beginsession()
    {
        date_default_timezone_set('America/Denver');
        $val_data = $this->validate();

//        $sessionID = preg_replace('[-]', '', preg_replace('/[0-9]+/', '', Str::uuid()->toString()));
//        $sessionID = $this->uniqidReal();

        $this->userFirstName = $val_data['userFirstName'];
        $this->userLastName = $val_data['userLastName'];
        $this->userEmail = $val_data['userEmail'];
        $this->userGender = $val_data['userGender'];
        $this->userSubspecialty = $val_data['userSubspecialty'];
        $this->userInstitution = $val_data['userInstitution'];
        $this->userMdYear = $val_data['userMdYear'];

        $consentedAt = date('Y-m-d H:i:s', time());

        ActiveSession::insert(['sessionID' => $this->sessionID,
            'userID' => $this->makeUserID(),
            'firstName' => $this->userFirstName,
            'lastName' => $this->userLastName,
            'email' => $this->userEmail,
            'gender' => $this->userGender,
            'consent' => true,
            'consentedAt' => $consentedAt,
            'subspecialty' => $this->userSubspecialty,
            'institution' => $this->userInstitution,
            'mdYear' => $this->userMdYear]);

//        Scene::insert([
//            'sessionID' => $sessionID,
//            'scene' => 'consent',
//            'completed' => $consentedAt
//        ]);

        Scene2::where('sessionID', $this->sessionID)
            ->where('completed', null)
            ->update(['completed' => $consentedAt]);

        $this->emitTo('sid2302.session', 'start_persona_survey');
    }
    
    public function render()
    {
        return view('livewire.sid2302.session.entry');
    }
}

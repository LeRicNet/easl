<?php

namespace App\Http\Livewire\Sid2302\Session;

use Livewire\Component;
use App\Models\ActiveSession;
use App\Models\Scene;

use Illuminate\Support\Str;

class Entry extends Component
{
    
    public string $userFirstName;
    public string $userLastName;
    public string $userEmail;
    public string $userSubspecialty;
    public string $userInstitution;
    public int $userMdYear = 1990;

    public $session;

    public $debugvar = 1;
    

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


    public function beginsession()
    {
        date_default_timezone_set('America/Denver');
//        $session = new ActiveSession;
//        $session->sessionID = uniqid();
//        $session->userID = $this->makeUserID();
//        $session->firstName = $this->userFirstName;
//        $session->lastName = $this->userLastName;
//        $session->email = $this->userEmail;
//        $session->consent = true;
//        $session->consentedAt = date('Y/d/m h:i:s a', time());
//        $session->institution = $this->userInstitution;
//        $session->mdYear = $this->userMdYear;
//        $session->save();

        //  ['sessionID' => uniqid(),
//            'userID' => $this->makeUserID(),
//            'firstName' => $this->userFirstName,
//            'lastName' => $this->userLastName,
//            'email' => $this->userEmail,
//            'consent' => true,
//            'consentedAt' => date('Y/d/m H:i:s', time()),
//            'subspecialty' => $this->userSubspecialty,
//            'institution' => $this->userInstitution,
//            'mdYear' => $this->userMdYear]

//        $sessionID = preg_replace('[-]', '', preg_replace('/[0-9]+/', '', Str::uuid()->toString()));
        $sessionID = $this->uniqidReal();
        $consentedAt = date('Y-m-d H:i:s', time());
        $userID = $this->uniqidReal();
//        $userID = preg_replace('[-]', '', preg_replace('/[0-9]+/', '', Str::uuid()->toString()));
        
        
        ActiveSession::insert([
            'sessionID' => $sessionID,
            'userID' => $userID,
            'firstName' => 'Eric',
            'lastName' => 'Prince',
            'email' => 'e@p.com',
            'consent' => true,
            'consentedAt' => $consentedAt,
            'institution' => 'CHCO',
            'mdYear' => 1990,
            'subspecialty' => 'neurosurgery'
        ]);
        
        Scene::insert([
            'sessionID' => $sessionID,
            'scene' => 'consent',
            'completed' => $consentedAt
        ]);
        
        $this->emitUp('sceneCompleted');
//        $this->session = $session;
//        $session->save();
//        return $this->redirect("/sid2302");
    }
    
    public function testFn()
    {
        $this->debugvar++;
        return $this->redirect("/sid2302");
    }
    
    public function render()
    {
        return view('livewire.sid2302.session.entry');
    }
}

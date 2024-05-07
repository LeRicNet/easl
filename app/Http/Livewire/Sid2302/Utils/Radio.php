<?php

namespace App\Http\Livewire\Sid2302\Utils;

use App\Models\CurrentPatient;
use App\Models\PatientPredictions2 as Preds;
use Livewire\Component;
use App\Models\AIEnabled;

class Radio extends Component
{
    public $type;
    public $option_group;
    public $value_options;
    public $feature_keys;
    public $predicted_value;
    public $selected = false;
    
    public $aligns_with_prediction = array();

    public function format_values()
    {
        if (! is_array($this->value_options)) {
            $this->value_options = explode(",", $this->value_options);
        }
        if (! is_array($this->feature_keys)) {
            $this->feature_keys = explode(",", $this->feature_keys);
        }
        foreach ($this->feature_keys as $feature_key) {
            $this->aligns_with_prediction[] = $this->compare_to_prediction($feature_key);
        }
    }
    
    public function compare_to_prediction($feature_key, $value_option=null)
    {
        $patient = CurrentPatient::first()->patient;
        $prediction = Preds::where('patient', $patient)
            ->where('feature', $feature_key)
            ->first()
            ->value;
        $this->predicted_value = $prediction;

        if (boolval(AIEnabled::first()->is_ai_enabled)) {
            if ($this->predicted_value < 50) {
                $aligns_with_prediction = false;
            } else {
                $aligns_with_prediction = true;
            }
        } else {
            $aligns_with_prediction = true;
        }


        if (isset($value_option)) {
            $this->emitUp('update_form', $this->option_group, $feature_key, $value_option);
        }

        return $aligns_with_prediction;
    }

    public function render()
    {
        $this->format_values();
        return view('livewire.sid2302.utils.radio');
    }
}

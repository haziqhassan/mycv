<?php

    class Contr extends Model{

        public function updateInfo($currentJob, $address, $email, $contactNo)
        {
            $this->editInfo($currentJob, $address, $email, $contactNo);
        }

    }

?>
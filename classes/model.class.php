<?php

    class Model extends Db{

        protected function getInfo()
        {
            $sql = "SELECT * FROM info";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();
            return $result;
        }

        protected function editInfo($currentJob, $address, $email, $contactNo)
        {
            $sql = "UPDATE info SET currentJob = ?, address = ?, email = ?, contactNo = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$currentJob, $address, $email, $contactNo]);
        }

    }

?>
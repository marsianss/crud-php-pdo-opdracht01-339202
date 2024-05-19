<?php

class Afspraak
{
    private $db;

    
    public function __construct()
    {
        /**
         * Create a new database object that connects to the MySQL server
         */
        $this->db = new Database();
    }

    /**
     * Get all records from the Appointment table
     */
    public function getAppointments()
    {
        try {
            /**
             * Create an SQL query to retrieve the desired information from the database
             */
            $sql = 'SELECT id
                          ,roze
                          ,blauw
                          ,roze2
                          ,geel
                          ,telefoonnummer
                          ,email
                          ,afspraak_datum
                          ,nagelbijt_arrangement
                          ,luxe_manicure
                          ,nagelreparatie
                          ,verzend_datum_tijd
                    FROM   afspraak';

            /**
             * Prepare the query for the PDO object
             */
            $this->db->query($sql);

            /**
             * Return the retrieved information to the controller
             */
            return $this->db->resultSet();
        } catch (Exception $e) {
            // Handle the exception here, for example, logging or displaying an error message
            echo 'An error occurred: ' . $e->getMessage();
        }
    }

    public function createAppointment($postArrayData) 
    {
        $sql = 'INSERT INTO afspraak (roze, blauw, roze2, geel, telefoonnummer, email, afspraak_datum, nagelbijt_arrangement, luxe_manicure, nagelreparatie, verzend_datum_tijd)
                VALUES (:roze, :blauw, :roze2, :geel, :telefoonnummer, :email, :afspraak_datum, :nagelbijt_arrangement, :luxe_manicure, :nagelreparatie, :verzend_datum_tijd)';
    
        $this->db->query($sql);
    
        $this->db->bind(':roze', $postArrayData['roze'], PDO::PARAM_STR);
        $this->db->bind(':blauw', $postArrayData['blauw'], PDO::PARAM_STR);
        $this->db->bind(':roze2', $postArrayData['roze2'], PDO::PARAM_STR);
        $this->db->bind(':geel', $postArrayData['geel'], PDO::PARAM_STR);
        $this->db->bind(':telefoonnummer', $postArrayData['phone'], PDO::PARAM_STR);
        $this->db->bind(':email', $postArrayData['email'], PDO::PARAM_STR);
        $this->db->bind(':afspraak_datum', $postArrayData['date'], PDO::PARAM_STR);
    
        // Bind the checkbox values
        $this->db->bind(':nagelbijt_arrangement', $postArrayData['nagelbijt_arrangement'], PDO::PARAM_INT);
        $this->db->bind(':luxe_manicure', $postArrayData['luxe_manicure'], PDO::PARAM_INT);
        $this->db->bind(':nagelreparatie', $postArrayData['nagelreparatie'], PDO::PARAM_INT);
        $this->db->bind(':verzend_datum_tijd', $postArrayData['verzendDatumTijd'], PDO::PARAM_STR);
    
        return $this->db->execute();
    }
    

}


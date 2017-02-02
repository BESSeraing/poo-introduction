<?php


class Eleve
{
    
    private $nom;
    private $prenom;
    private $email;
    
    private $present = false;
    
    private $cotes = [];
    
    
    public function __construct($nom,$prenom,$email)
    {
        $this->setNom($nom);        
        $this->setPrenom($prenom);        
        $this->setEmail($email);
        
    }


    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($name){
        if (is_numeric($name)){
            throw new Exception('le nom doit être une chaine de caractères');
        }
        $this->nom = $name;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        if (is_numeric($prenom)){
            throw new Exception('le prénom doit être une chaine de caractères');
        }
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isPresent(): bool
    {
        return $this->present;
    }

    /**
     * @param bool $present
     */
    public function setPresent(bool $present)
    {
        $this->present = $present;
    }

    /**
     * @return array
     */
    public function getCotes(): array
    {
        return $this->cotes;
    }

//    /**
//     * @param array $cotes
//     */
//    public function setCotes(array $cotes)
//    {
//        $this->cotes = $cotes;
//    }
    
    public function addCote(Cote $cote){
        $this->cotes[] = $cote;
    }
    

}
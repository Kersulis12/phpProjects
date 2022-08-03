<?php
include "./models/Participant.php";

class ParticipantController
{//4 metodai
    
    public static function index()
    {
        $participants = Participant::all();
        return $participants;
    }
    
    public static function show()
    {
        $participant = Participant::find($_POST['id']);
        return $participant;
    }
    
    public static function store()
    {
        //patikrinimai (turetu buti kintamasis ir ife aprasoma, kas blogai butu, kad ismestu klaida)
        if(false) {
            session_start();
            $_SESSION['errors'] [] = "not true country";
            $_SESSION['errors'] [] = "not true job";
            return true;
        }else {
            Participant::create();
            return false;
        }
    }

    public static function update()
    {
        Participant::update();
    }

    public static function destroy()
    {
        Participant::destroy();
    }

}

?>
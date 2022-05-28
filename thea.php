<?php
    $vb=$_POST["vb"];

    if ($vb=="German CV Outdated Act 1"){
        header("Location:https://www.mediafire.com/file/amfzwqne2cu1lra/Thea_-Contralto-.zip/file");
    }

    elseif ($vb=="German CV Outdated Act 2"){
        header("Location:https://www.mediafire.com/file/ptci8u62b3ku0ha/Thea_-Contralto-_English_Support.zip/file");
    }

    elseif ($vb=="German CVCV -Crystal-"){
        header("Location:http://www.mediafire.com/file/b0zyaoiwv1u43um/Theresa+CVCV+-Crystal-+German.zip/file");
    }

    elseif ($vb=="German CVCV -Contralto-"){
        header("Location:https://www.mediafire.com/file/q2eh2ln6wp3pxo5/Theresa+CVCV+-Contralto-+German+Act+2.zip/file");
    }

    elseif ($vb=="English CV-VV Outdated"){
        header("Location:http://www.mediafire.com/file/tw3ss5br7an5yls/Theresa_Act_1_CV-VV.zip/file");
    }

    elseif ($vb=="English/Multilingual CVVC -Bluemoon- Act 1"){
        header("Location:http://www.mediafire.com/file/t1umkrwalftgrfi/Theresa_Act_1_CVVC.zip/file");
    }

    elseif ($vb=="English/Multilingual CVVC -Bluemoon- Act 2"){
        header("Location:https://drive.google.com/file/d/1EajIHt4FykK6ZOxWOunA3_nzAb2MsWWZ/view");
    }

    elseif ($vb=="French CV Outdated"){
        header("Location:https://www.mediafire.com/file/rt1bv5vskc4x1ju/Thea_-Contralto-_French_CV.zip/file");
    }

    else{
        echo "Error: This voicebank does not exist.";
    }   
?>
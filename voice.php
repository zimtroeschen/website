<?php
    $vb=$_POST["vb"];

    if ($vb=="Japanese CV Outdated"){
        header("Location:http://www.mediafire.com/file/mn61gw8mj130tml/KOI-m_CV.zip/file");
    }

    elseif ($vb=="Japanese CV -Dolly-"){
        header("Location:http://www.mediafire.com/file/55zrxqzoto6a8gw/KOI-m_CV_Act_2.zip/file");
    }

    elseif ($vb=="Japanese VCV Outdated"){
        header("Location:https://www.mediafire.com/file/vt0dnkr63isidr5/KOI-m_VCV_Act_1.zip/file");
    }

    elseif ($vb=="Japanese VCV -Dolly-"){
        header("Location:https://www.mediafire.com/file/fvflo5o5byblv9i/KOI-m_VCV_Act_2.zip/file");
    }

    elseif ($vb=="Japanese VCV -Natural-"){
        header("Location:https://www.mediafire.com/file/022tlqm90cv1lq0/KOI-m_VCV_-Natural-.zip/file");
    }

    elseif ($vb=="Japanese VCV -Childish-"){
        header("Location:https://www.mediafire.com/file/pz3vxhlnkly200a/KOI-m_VCV_-Childish-.zip/file");
    }

    elseif ($vb=="Japanese VCV -Dark-"){
        header("Location:https://www.mediafire.com/file/beaghu65z3h8z48/KOI-m_VCV_-Dark-.zip/file");
    }

    elseif ($vb=="Japanese VCV -Power-"){
        header("Location:http://www.mediafire.com/file/qtls6jq7wjzldxl/KOI-m+VCV+-Power-.zip/file");
    }

    elseif ($vb=="Korean CV Outdated"){
        header("Location:https://www.mediafire.com/file/lepwsniliic9bh3/KOI-m_full_CV_bank.zip/file");
    }

    elseif ($vb=="Korean CVVC -Porcelain-"){
        header("Location:https://www.mediafire.com/file/82volqj3mgljbus/KOI-m_CVC_KOR_-Porcelain-.zip/file");
    }

    elseif ($vb=="Russian CVC -Porcelain-"){
        header("Location:https://www.mediafire.com/file/6lqcy1prj7v26h0/KOI-m_CVC_RUS_-Porcelain-.zip/file");
    }

    elseif ($vb=="French CV -Porcelain-"){
        header("Location:https://www.mediafire.com/file/h3k7j1bzgzxvcgn/KOI-m_CV_FRA_-Porcelain-.zip/file");
    }

    elseif ($vb=="French CVVC -Porcelain-"){
        header("Location:http://www.mediafire.com/file/258awznlwtph0vp/KOI-m+CVVC+FRA+-Porcelain-.zip/file");
    }

    elseif ($vb=="English/Multilingual CVVC -Bluemoon-"){
        header("Location:https://www.mediafire.com/file/88o46nk09p9eid1/KOI-m+CVVC+-Bluemoon-.zip/file");
    }

    elseif ($vb=="English VCCV -Porcelain-"){
        header("Location:http://www.mediafire.com/file/icmcclc57mvzhke/KOI-m+VCCV+ENG+-Porcelain-.zip/file");
    }

    else{
        echo "Error: This voicebank does not exist.";
    }   
?>
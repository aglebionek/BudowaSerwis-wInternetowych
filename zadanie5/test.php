<?php
session_start();

if(!isset($_SESSION['isloggedin'])) {
    header("Location: http://aglebionek.infinityfreeapp.com/");
};

// Load the XML source
$xml = new DOMDocument;
$xml->load('pier.xml');

$xsl = new DOMDocument;
$xsl->load('testowy.xslt');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

$domTranObj = $proc->transformToDoc($xml);
$domHtmlText = $domTranObj->saveHTML();

echo
            "<form style='position:absolute; top:5px; right:5px; z-index:1;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>";

echo $domHtmlText;

?>
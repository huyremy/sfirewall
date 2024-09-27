<?php 
function hfvcgha7cb6a4c($qgfjws9d0de3ee) {
    $gmnxtx572d4e42 = base64_decode('aHR0cHM6Ly9hcGkuYWJ1c2VpcGRiLmNvbS9hcGkvdjIvY2hlY2s='); 
    $hcixold88fc6ed = curl_init(); 
    curl_setopt($hcixold88fc6ed, CURLOPT_URL, $gmnxtx572d4e42.base64_decode('P2lwQWRkcmVzcz0=').urlencode($qgfjws9d0de3ee).base64_decode('Jm1heEFnZUluRGF5cz05MCZ2ZXJib3Nl')); 
    curl_setopt($hcixold88fc6ed, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($hcixold88fc6ed, CURLOPT_HTTPHEADER, [ 
        base64_decode('S2V5OiBkZDc4ZTZlNDNkM2M4OTRhN2UxY2U0MzU5OTY1ODViNjNhNmZiNTU3ZDVjOTI0Yjc0NGU0NmRlOWU3NDU2NzhiYjRjMjVhZGY0ZTRmNjM1ZQ=='), 
        base64_decode('QWNjZXB0OiBhcHBsaWNhdGlvbi9qc29u') 
    ]); 
    
    $bgrmvvd1fc8eaf = curl_exec($hcixold88fc6ed); 
    if (curl_errno($hcixold88fc6ed)) { 
        return null; 
    } 
    curl_close($hcixold88fc6ed); 
    $awrxoh8d777f38 = json_decode($bgrmvvd1fc8eaf, true); 
    
    return isset($awrxoh8d777f38[base64_decode('ZGF0YQ==')][base64_decode('dG90YWxSZXBvcnRz')]) ? $awrxoh8d777f38[base64_decode('ZGF0YQ==')][base64_decode('dG90YWxSZXBvcnRz')] : null; 
} 

function zbpzmp63b4ce83($qgfjws9d0de3ee) { 
    $bpsjxndb87497a = explode(base64_decode('Lg=='), $qgfjws9d0de3ee); 
    $fddbmyf36f7d6d = "{$bpsjxndb87497a[0]}.{$bpsjxndb87497a[1]}.{$bpsjxndb87497a[2]}.0/20"; 
    $tpiaoae539a2fe = base64_decode('Lmh0YWNjZXNz'); 
    $wtkjho95a2c079 = "Deny from $fddbmyf36f7d6d\n"; 
    
    if (file_exists($tpiaoae539a2fe)) { 
        $azjupo999f828f = file_get_contents($tpiaoae539a2fe); 
        if (strpos($azjupo999f828f, $wtkjho95a2c079) === false) { 
            file_put_contents($tpiaoae539a2fe, $wtkjho95a2c079, FILE_APPEND); 
        } 
    } else { 
        file_put_contents($tpiaoae539a2fe, $wtkjho95a2c079); 
    } 
} 

$qgfjws9d0de3ee = $_SERVER[base64_decode('UkVNT1RFX0FERFI=')]; 
$rvhajva182eb1c = hfvcgha7cb6a4c($qgfjws9d0de3ee); 

if ($rvhajva182eb1c > 0) { 
    zbpzmp63b4ce83($qgfjws9d0de3ee); 
} 

echo base64_decode('U29mdCBGaXJld2FsbCBCeSBIdXlSZW15');
?>

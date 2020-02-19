<? php
    $file_name = 'src/counter.xml';
    $xml = simplexml_load_file(file_name);
    $num = (int)($xml->visitor)+1;
    $dom = new DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;
        $root = $dom->createElement('content');
        $visitor = $dom->createElement('visitor', num);
        $dom->appendChild($root);
        $root->appendChild($visitor);
    echo $num;
?>
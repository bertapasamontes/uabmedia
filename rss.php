<?php
    header('Content-Type: application/xml; charset=utf-8');

    include 'config.php';
    $GET_VARS2 = array(
        "go"        => "clip",
        "do"        => "list"
    );
    
    $POST_VARS = array(
        "statusFilter" => 1,
        "resultsPerPageFilter" => 10,
        "fields" => "*",
        "categoriesFilter"  => $data->data->id,
        "generateEmbedCode" => 1
    );
    
    $REQUEST_URL = $API_URL."?".http_build_query($GET_VARS)."&".http_build_query($GET_VARS2);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $REQUEST_URL);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_VARS);
    
    $response = curl_exec($ch);
    
    $data = json_decode($response);

    echo $REQUEST_URL;
?>
<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:ccma="http://www.w3.org/TR/html4/" version="2.0">
    <channel>
        <title>Notícies d'uab.media</title>
        <link>https://uab.media</link>
        <description>Notícies dels mitjans de comunicació de l'Autònoma</description>
        <language>ca</language>
        <itunes:owner>
            <itunes:name>Universitat Autònoma de Barcelona</itunes:name>
            <itunes:email>campus.media@uab.cat</itunes:email>
        </itunes:owner>
        <atom:link href="https://uab.media/rss.xml" rel="self" type="application/rss+xml" />

        <item>
            <title><?php echo $data->list['0']->title; ?></title>
            <link>https://uab.media/noticia?iq=<?php echo $data->list['0']->id; ?></link>
            <description><?php echo $data->list['0']->description_seo; ?></description>
            <pubDate><?php echo $data->list['0']->date_formatted; ?></pubDate>
            <enclosure type="audio/mpeg" url="https://audios.ccma.cat/multimedia/mp3/7/1/1643098209917.mp3"/>
        </item>

    </channel>
</rss>
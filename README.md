# Connection

## Properties

<pre>
    $setting = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'data_base' => 'web',
        'port' => '3306',
        'password' => '',
        'user_name' => 'root',
        'charset' => 'utf8mb4'
    ];
</pre>

## Methods

<ol>
    <li>__construct (array $setting) {}</li>
    <li>connect (int $mssg = 0)</li>
    <li>set_driver (string $x)</li>
    <li>set_host (string $x)</li>
    <li>set_data_base (string $x)</li>
    <li>set_port (string $x)</li>
    <li>set_password (string $x)</li>
    <li>set_user_name (string $x)</li>
    <li>set_charset (string $x)</li>
    <li>get_driver ()</li>
    <li>get_host ()</li>
    <li>get_data_base ()</li>
    <li>get_port ()</li>
    <li>get_password ()</li>
    <li>get_user_name ()</li>
    <li>get_charset ()</li>
</ol>

## how to 

<pre>
    $connect = new Connection;

    $connect->set_driver ('string');
    $connect->set_host ('string');
    $connect->set_data_base ('string');
    $connect->set_port ('string');
    $connect->set_password ('string');
    $connect->set_user_name ('string');
    $connect->set_charset ('string');
</pre>

## To show a message on the screen use

<pre>$connect->connect(1);</pre>

## To get the result (the connection object perse) of the connection use

<pre>$connect->connect();</pre>
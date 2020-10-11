<p> <?php 

$prenom = array(
    "candidat1" => "gavin",
    'candidat2' => 'thomas',
    'candidat3' => 'francis'
);

foreach ($prenom as $cle => $element){
    echo $cle . ' = ' . $element . '<br />';
}



get_header();
if(have_posts())
{
    while(have_posts()){
        the_post();
        the_content();
    }
}
?>

</p>
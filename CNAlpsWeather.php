<?php
//// Paramètres de la requête
//$ville = "Crest";
//
//// URL de l'API avec les paramètres
//$url = "https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city=" . urlencode($ville) . "&country=France&language=french";
//
//// Récupération des données JSON
//$jsonData = file_get_contents($url);
//
//if ($jsonData !== false) {
//    // Conversion des données JSON en un tableau associatif PHP
//    $data = json_decode($jsonData, true);
//
//    // Vérification si la requête a réussi
//    if ($data["status"] == 200) {
//        $status_message = $data["status_message"];
//        $temperature = $data["temp"];
//        $icon_url = $data["icon"];
//        $description = $data["description"];
//
//        // Affichage du widget météo
//        echo "<div class='cnalps-weather-widget'>";
//        echo "<h2>Météo pour $status_message</h2>";
//        echo "<div class='weather-info'>";
//        echo "<img src='" . $icon_url . "' alt='Icône météo'>";
//        echo "<p class='temperature'>$temperature °C </p>";
//              echo "<p class='description'> $description</p>";
//        echo "</div>";
//        echo "</div>";
//
//
//    } else {
//        echo "La requête à l'API a échoué.";
//    }
//} else {
//    echo "Erreur lors de la récupération des données de l'API.";
//}


class CNAlpsWeather extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'cnalps-weather',
            'CNAlps Weather',
            array('description' => 'Affiche la météo de Annecy')
        );
    }

    public function widget($args, $instance)
    {

        extract($args);

        $title = isset($instance['title']) ? apply_filters('widget_title', $instance['title']) : '';
        $city = isset($instance['city']) ? $instance['city'] : '';
        $country = isset($instance['country']) ? $instance['country'] : '';
        $lang = isset($instance['lang']) ? $instance['lang'] : '';

        $results = file_get_contents("https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city=$city&country=$country&language=$lang");
        $results = json_decode($results);
        // var_dump($results);
        echo $args['before_widget'];
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        } ?>

        <div class="bgCard">
            <div class="weather">
                <div class="weather__city"><?php echo $city . ', ' . $country ?></div>
                <div class="weather__icon"><img src="<?php echo(strval($results->icon)) ?>" alt="" width="60px"></div>
                <div class="weather__temp">
                    <span class="weather__temp__value"><?php echo(strval($results->temp)); ?></span>
                    <span class="weather__temp__unit">C°</span>
                </div>
                <div class="weather__desc"><?php echo(strval($results->description)); ?></div>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $defaults = array(
            'title' => '',
            'city' => '',
            'country' => '',
            'lang' => ''
        );

        extract(wp_parse_args((array)$instance, $defaults)); ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Titre :</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('city'); ?>">Ville :</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id('city'); ?>"
                   name="<?php echo $this->get_field_name('city'); ?>" value="<?php echo esc_attr($city); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('country'); ?>">Pays :</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id('country'); ?>"
                   name="<?php echo $this->get_field_name('country'); ?>" value="<?php echo esc_attr($country); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('lang'); ?>">Langue :</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id('lang'); ?>"
                   name="<?php echo $this->get_field_name('lang'); ?>" value="<?php echo esc_attr($lang); ?>"/>
        </p>

        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['city'] = (!empty($new_instance['city'])) ? strip_tags($new_instance['city']) : '';
        $instance['country'] = (!empty($new_instance['country'])) ? strip_tags($new_instance['country']) : '';
        $instance['lang'] = (!empty($new_instance['lang'])) ? strip_tags($new_instance['lang']) : '';

        return $instance;
    }
}
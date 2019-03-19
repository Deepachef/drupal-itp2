<?php
namespace Drupal\hello_world;


use Drupal\Core\Config\ConfigFactoryInterface;
/**
* Prepares the salutation to the world.
*/
class HelloWorldSalutation {


    /**
     * @var \Drupal\Core\Config\ConfigFactoryInterface
     */
    protected $configFactory;
    /**
     * HelloWorldSalutation constructor.
     *
     * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
     */
    public function __construct(ConfigFactoryInterface $config_factory) {
        //print_r($config_factory); exit;
        $this->configFactory = $config_factory;
    }

    /**
    * Returns the salutation
    */
    public function getSalutation()
    {
        $config = $this->configFactory->get('hello_world.custom_salutation');
        $salutation = $config->get('salutation');
        if ($salutation != "") {
            return $salutation;
        } else {

            $time = new \DateTime();
            if ((int)$time->format('G') >= 06 && (int)$time->format('G') < 12) {
                return $this->t('Good morning world');
            }
            if ((int)$time->format('G') >= 12 && (int)$time->format('G') < 18) {
                return $this->t('Good afternoon world');
            }
            if ((int)$time->format('G') >= 18) {
                return $this->t('Good evening world');
            }
        }
    }
}

?>
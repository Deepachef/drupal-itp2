<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 26/3/19
 * Time: 12:21 PM
 */
namespace Drupal\taxonomy_form_block\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\taxonomy_form_block\TaxonomyFormBlock;
use Symfony\Component\DependencyInjection\ContainerInterface;
class TaxonomyForm extends FormBase {
    /**
     * @var \Drupal\taxonomy_form_block\TaxonomyFormBlock
     */
    protected $taxonomy;
    /**
     * {@inheritdoc}
     */
    /**
     *
     * @param \Drupal\taxonomy_form_block\TaxonomyFormBlock $taxonomy
     */
    public function __construct(TaxonomyFormBlock $taxonomy) {
        $this->taxonomy = $taxonomy;
    }
    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container) {
        return new static(
            $container->get('taxonomy_form_block.get_taxonomy')
        );
    }
    public function getFormId() {
        return 'taxonomy_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        //print_r($this->taxonomy->get_taxonomy()); exit;

        $form['taxonomy_level1'] = array(
            '#type' => 'select',
            '#title' => t('Level 1'),
            '#options' => $this->taxonomy->get_taxonomy()
        );
        $form['taxonomy_level2'] = array(
            '#type' => 'select',
            '#title' => t('Level 2')
        );
        $form['taxonomy_level3'] = array(
            '#type' => 'select',
            '#title' => t('Level 3')
        );
        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
            '#button_type' => 'primary',
        );
        $form['#attached']['library'][] = 'taxonomy_form_block/custom_js';
        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {

        \Drupal::messenger()->addStatus(t('The Salutation have been saved.'));
    }

    public function get_ajax_taxonomy(&$form,\Drupal\Core\Form\FormStateInterface $form_state)
    {

    }
}
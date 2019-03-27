<?php

namespace Drupal\taxonomy_form_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Taxonomy Form' Block.
 *
 * @Block(
 *   id = "taxonomy_form_block",
 *   admin_label = @Translation("Taxonomy Form Block"),
 *   category = @Translation("Taxonomy Form Block"),
 * )
 */
class TaxonomyFormBlock extends BlockBase {

    /**
     * Drupal\hello_world\HelloWorldSalutation definition.
     *
     * @var \Drupal\hello_world\HelloWorldSalutation
     */
    protected $salutation;
    /**
     * {@inheritdoc}
     */
    public function build() {

        $form = \Drupal::formBuilder()->getForm('\Drupal\taxonomy_form_block\Form\TaxonomyForm');
        return $form;

        /*return array(
            '#markup' => $this->t('A block!'),
        );*/
    }

    /*public function blockForm($form, FormStateInterface $form_state) {
        $config = $this->getConfiguration();
        $form['taxonomy_level1'] = array(
            '#type' => 'select',
            '#title' => t('Level 1 taxonomy term')
        );
        $form['taxonomy_level2'] = array(
            '#type' => 'select',
            '#title' => t('Level 2 taxonomy term')
        );
        $form['taxonomy_level3'] = array(
            '#type' => 'select',
            '#title' => t('Level 3 taxonomy term')
        );
        return $form;
    }*/

}

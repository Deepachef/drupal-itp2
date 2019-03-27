<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 26/3/19
 * Time: 11:36 AM
 */

namespace Drupal\taxonomy_form_block;

class TaxonomyFormBlock
{
   public function get_taxonomy()
   {
       $vid = 'restaurants';
       $terms =\Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid,0,1);
       foreach ($terms as $term) {
           $term_data[$term->tid] = $term->name;
           
       }
       return $term_data;
   }
}
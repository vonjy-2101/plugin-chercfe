<div class="wrap">
<h2><?php _e('Bookin cherche','plugin-chercfe'); ?></h2>
<br>
<button class="btn btn-primary">Ajouter</button>
<br>
  <table class="wp-list-table widefat fixed striped pages">
      <thead>
        <tr>
          <th scope="col" style="text-align:left;"><?php _e('Déstinnation', 'plugin-chercfe'); ?></th>
          <th scope="col" style="text-align:left;"><?php _e('Date', 'plugin-chercfe'); ?> </th>
          <th scope="col" style="text-align:left;"><?php _e("Port", "plugin-chercfe"); ?></th>
          <th scope="col" style="text-align:left;"><?php _e("Compagnie", "plugin-chercfe"); ?></th>
          <th scope="col" style="text-align:left;"><?php _e("Image", "plugin-chercfe"); ?></th>
          <th scope="col" style="text-align:left;"><?php _e("Action", "plugin-chercfe"); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php
          global $wpdb;
          $table = $wpdb->prefix . BOOKIN;
          $results = $wpdb->get_results( 'SELECT * FROM ' . $table . ' ' );
          foreach ($results as $key => $data):
        ?>
          <tr>
            <td><?php echo  $data->destinnation ?></td>
            <td><?php echo  $data->date ?></td>
            <td><?php echo  $data->port ?></td>
            <td><?php echo  $data->compagnie ?></td>
            <td><?php echo  $data->image ?></td>
            <td><button class="btn btn-success" id="edit">Modifier</button><button class="btn btn-danger">Supprimer</button></td>
          </tr>
        <?php endforeach?>
      </tbody>
    </table>
</div>
<script>
  $("#edit").click(function(){
    alert("test");
  })
</script>
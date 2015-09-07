<?php
/**
 * @package ITC260
 * @subpackage my404
 * @author ITC260 Summer Class
 * @version 1.0 2015/8/11
 * @link view/my404/index.php
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see controllers/My404.php
 * @see models/My404_model.php
 * @todo none
 */
?>

<?php
//$this->load->view($this->config->item('theme') . 'header');
$this->load->helper('url');
$this->load->view('templates/header');
?>
<div id="body">

            <h1>404 Page</h1>
            
                <p>Oops! We all make mistakes. The page you are looking for does not exist.</p>
    
</div><!-- end body -->
        
    

<?php
//$this->load->view($this->config->item('theme') . 'footer');
$this->load->view('templates/footer');
?>
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    
	<?php
                echo $this->Html->css(array(
                    'reset','default','style','shCoreDefault','myStyle','message_display'
                ));
               //echo $this->Html->script(array('prototype'));
                echo $this->Html->script(array(
                    'XRegExp','shCore','shLegacy','shBrushJScript','shBrushXML','jquery.min','selector','typeahead.min'
                ));
                
		echo $this->Html->meta('icon');
                echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('bootstrap-theme.min');
                //echo $this->Html->css('screen');


                echo $this->Html->css('style');
                //echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-color:#bbbb" >
	<div class="container-fluid">
            
            
            
            
            
            
            <?php echo $this->fetch('content'); ?>	
	</div>
    
    

<?php echo $this->Html->script(array(
        'jquery.min',
        'jquery-ui.min',
        'application',
		'bootstrap'));  ?>
</body>
</html>

<?php $vacature_pagina_link = get_field( 'vacature_pagina_link', 'option' ); ?>
<?php if ( $vacature_pagina_link ) { ?>
	<a href="<?php echo $vacature_pagina_link['url']; ?>" target="<?php echo $vacature_pagina_link['target']; ?>"><?php echo $vacature_pagina_link['title']; ?></a>
<?php } ?>
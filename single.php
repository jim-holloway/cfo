<?php
if (in_category('news')) {include (TEMPLATEPATH . '/single-news.php');
}
elseif (in_category('press-release')) {include (TEMPLATEPATH . '/single-press.php');

}
elseif (in_category('foundation-news') AND !in_category('news')) {include (TEMPLATEPATH . '/single-foundation-news.php');
}
elseif (in_category('foundation-press-release') AND !in_category('press-release') ) {include (TEMPLATEPATH . '/single-foundation-press.php');
}

elseif (in_category('foundation-news') AND in_category('news')) {include (TEMPLATEPATH . '/single-news.php');
}
elseif (in_category('foundation-press-release') AND in_category('press-release')) {include (TEMPLATEPATH . '/single-press.php');
}

else { include (TEMPLATEPATH . '/single-blog.php');
}
?>

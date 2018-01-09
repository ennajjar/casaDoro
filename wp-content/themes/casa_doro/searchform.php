<form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url('/'); ?>">
    <input placeholder="votre recherche ..." name="s" type="text" value="<?php the_search_query() ? 'the_search_query':''; ?>">
    <input type="submit" title="Lancer la recherche" value="Rechercher" class="search-submit">
</form>



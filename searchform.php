<div class="search">
  <form action="<?php echo home_url( '/' ) ?>" class="search__form flex" method="get" role="search" id="searchform">
    <input type="text" class="search__input" id="s" name="s" value="<?php echo get_search_query() ?>" placeholder="Поиск">
    <input type="submit" class="search__submit" id="searchsubmit" name="найти">
  </form>
</div>
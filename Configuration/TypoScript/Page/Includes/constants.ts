t3foundation {

  # cat=t3foundation - pages//100; type=int+; label= Root:Id of your root page. Pages in lower levels will inherit the content of a column, if they haven't any content in this column.
  pages.root = 1

  # cat=t3foundation - fluid path//200; type=string; label= layout:Path to the fluid layouts. With ending slash!
  fluid.path.layouts    = EXT:t3foundation/Ressources/Private/Layouts/Page/
  # cat=t3foundation - fluid path//201; type=string; label= partials:Path to the fluid partials. With ending slash!
  fluid.path.partials   = EXT:t3foundation/Ressources/Private/Partials/Page/
  # cat=t3foundation - fluid path//202; type=string; label= templates:Path to the fluid templates. With ending slash!
  fluid.path.templates  = EXT:t3foundation/Ressources/Private/Templates/Page/

}
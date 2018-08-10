/*social media and droup down*/  
      document.addEventListener('DOMContentLoaded', function() {

        var sidenav = document.querySelectorAll('.sidenav');
        var Sidenav = M.Sidenav.init(sidenav); /* slidnav */

        var dropdown = document.querySelectorAll('.dropdown-trigger');
        var Dropdown = M.Dropdown.init(dropdown);/*drou down */

        var dropdown1 = document.querySelectorAll('.dropdown-trigger1');
        var Dropdown = M.Dropdown.init(dropdown1);/*course droup down */

        var dropdown2 = document.querySelectorAll('.dropdown-trigger2');
        var Dropdown = M.Dropdown.init(dropdown2);/*course droup down */

        var fixed = document.querySelectorAll('.fixed-action-btn');
        var fixed = M.FloatingActionButton.init(fixed,{direction:'bottom'});/*floating botton */

        var el = document.querySelectorAll('.tabs');
        var tab = M.Tabs.init(el);

        var el = document.querySelectorAll('.carousel.carousel-slider');/*slider*/
        var instance = M.Carousel.init(el,{
        fullWidth: true,
        indicators: true
        });
  });

$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});




function placeHero(x, y) {
    var hero = document.getElementById('hero');
    hero.style.left = x + 'px';
    hero.style.top = y + 'px';
    hero_x = x;
    hero_y = y;
}

var hero_x; // current hero x coordinate
var hero_y; // current hero y coordinate

placeHero(150, 150); // in Developer/Element, check styles
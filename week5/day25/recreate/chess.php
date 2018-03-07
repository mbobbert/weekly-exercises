<?php
class piece {
    protected $type = null;
    protected $images =
    [
        'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
        'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
        'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
        'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
        'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
        'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
        'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
        'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
        'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
        'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
        'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
        'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
    ];

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return '<img src="  '. $this->images[$this->type] .'  "/>';
    }
}

class square {
    protected $x_coord = null;
    protected $y_coord = null;
    protected $piece = null;

    public function __construct($x, $y, $piece = null)
    {
        $this->x = $x;
        $this->y = $y;
        $this->piece = $piece;
    }

    protected function isDark()
    {
    if ($this->x_coord % 2 == $this->y_coord % 2 )
        {
            return true;
        }
        else {
            return false;
        }
    }

    public function __toString()
    {
        return '<div class="'.($this->isDark() ? "dark" : "light").'">' .$this->piece .'</div>';
    }
}

$white_queen = new piece('Q');
echo $white_queen;

$black_pawn = new piece('p');
echo $black_pawn;

$black_king = new piece('k');
echo $black_king;

$square = new square(0, 0, 'k');
$square = new square(3, 2, $black_king);

$a2 = new square(1, 2);
$b2 = new square(2, 2, $white_queen);
$c2 = new square(3, 2, $black_pawn);
$d2 = new square(4, 2);
echo $a2;
echo $b2;
echo $c2;
echo $d2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .dark {
            background-color: black;
        }

    </style>

</head>
<body>

</body>
</html>
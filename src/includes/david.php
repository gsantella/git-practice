<?php
    $bold = "";
    $font = ["Arial, sans-serif","Helvetica, sans-serif","Verdana, sans-serif","Trebuchet MS, sans-serif","Gill Sans, sans-serif","Noto Sans, sans-serif","Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif","Optima, sans-serif","Arial Narrow, sans-serif","sans-serif","Times, Times New Roman, serif","Didot, serif","Georgia, serif","Palatino, URW Palladio L, serif","Bookman, URW Bookman L, serif","New Century Schoolbook, TeX Gyre Schola, serif","American Typewriter, serif","serif","Andale Mono, monospace","Courier New, monospace","Courier, monospace","FreeMono, monospace","OCR A Std, monospace","DejaVu Sans Mono, monospace","monospace","Comic Sans MS, Comic Sans, cursive","Apple Chancery, cursive","Bradley Hand, cursive","Brush Script MT, Brush Script Std, cursive","Snell Roundhand, cursive","URW Chancery L, cursive","cursive","Impact, fantasy","Luminari, fantasy","Chalkduster, fantasy","Jazz LET, fantasy","Blippo, fantasy","Stencil Std, fantasy","Marker Felt, fantasy","Trattatello, fantasy","fantasy"];
    $rand = rand(0,1);
    $rand2 = rand(0,(count($font)-1));
    if ($rand == 0)
    {
        $bold = "bold";
    }
    else
    {
        $bold = "normal";
    }
?>
<p style="background-color:#a05050;font-family:<?= $font[$rand2] ?>">This section is STILL under construction by
    <span style='font-weight:<?= $bold ?>'>David Lafferty</span>
</p>
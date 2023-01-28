
<?php

try {
    echo intdiv(1, 0);
} catch(DivisionByZeroError | RuntimeException $problema) {
    echo $problema->getTraceAsString();
} 
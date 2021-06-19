<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>zadanie3</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            echo
            "
            <form style='float: right;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>
            ";
        ?>
        <div class="container">
            <div class="calculator">
              <div>
                <input class="calculator_display" type="text" disabled/>
              </div>
              <div class="calculator_keys">
                <script>
                  var display = document.getElementsByClassName('calculator_display').item(0);
                  var pars = 0;
                  function addNumber(number) {
                    if (display.value[display.value.length - 1] === ')') return;
                    display.value += number;
                  };
                  function addOperator(operator) {
                    if (display.value.length === 0 && '*/()'.includes(operator)) return;
                    if ('-.+*/('.includes(display.value[display.value.length - 1])) return;
                    display.value += operator;
                  };
                  function calculate() {
                    while('-+*/('.includes(display.value[display.value.length - 1])) backspace()
                    while (pars > 0) {
                      display.value += ')';
                      pars--;
                    }
                    display.value = eval(display.value);
                  };
                  function clean() {
                    display.value = '';
                    pars = 0;
                  };
                  function backspace() {
                    if (display.value[display.value.length - 1] === '(') pars--;
                    display.value = display.value.substring(0, display.value.length - 1);
                  };
                  function leftPar() {
                    if (!'-+*/('.includes(display.value[display.value.length - 1]) && display.value.length > 0) return;
                    display.value += '(';
                    pars++;
                  };
                  function rightPar() {
                    if (pars == 0) return;
                    if ('-+*/('.includes(display.value[display.value.length - 1])) return;
                    display.value += ')';
                    pars--;
                  };
                  function dot() {
                    if (display.value.length === 0) return;
                    if ('-+*/()'.includes(display.value[display.value.length - 1])) return;
                    splited = display.value.split(/[-+*//]/)
                    if(splited[splited.length - 1].includes('.')) return;
                    display.value += '.';
                  };
                </script>
                <button onclick="leftPar()">(</button> <button onclick="rightPar()">)</button> <button onclick="clean()">AC</button> <button onclick="backspace()">&lAarr;</button>
                <button onclick="addNumber('7')">7</button> <button onclick="addNumber('8')">8</button> <button onclick="addNumber('9')">9</button> <button onclick="addOperator('/')">/</button>
                <button onclick="addNumber('4')">4</button> <button onclick="addNumber('5')">5</button> <button onclick="addNumber('6')">6</button> <button onclick="addOperator('*')">*</button>
                <button onclick="addNumber('1')">1</button> <button onclick="addNumber('2')">2</button> <button onclick="addNumber('3')">3</button> <button onclick="addOperator('-')">-</button>
                <button onclick="addNumber('0')">0</button> <button onclick="dot()">.</button> <button onclick="calculate()">=</button> <button onclick="addOperator('+')">+</button>
              </div>
            </div>
          </div>
    </body>
</html>
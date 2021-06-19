class Calculator {
    Elements = {
        number_button = document.getElementsByClassName('number_button'),
        operator_button = document.getElementsByClassName(''),
        equal_button = document.getElementsByClassName(''),
        clear_button = document.getElementsByClassName(''),
        backspace_button = document.getElementsByClassName(''),
        dot_buton = document.getElementsByClassName(''),
        left_par_button = document.getElementsByClassName(''),
        right_par_button = document.getElementsByClassName(''),
        result = document.getElementsByClassName('calculator_display'),
        formula = document.getElementsByClassName('')
    };

    addListeners() { 
        this.Elements.number_button.forEach(element => {
            element.addEventListener("click", this.addNumber)
        });
    };

    addNumber() {
        this.Elements.result.value += '1'
    };
};

const calc = new Calculator()

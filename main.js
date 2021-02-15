'use strict'
/*let ask = (question, yes, no) => {
    if (confirm(question)) yes();
    else no();
}
ask('Вы согласны', () => {
     return alert('Хорошо')
}, () => {
    return alert('Идите нахуй тогда')
})*/

//ОБЪЕКТЫ ОСНОВЫ;
//1
/*Напишите код, выполнив задание из каждого пункта отдельной строкой:
    Создайте пустой объект user.
    Добавьте свойство name со значением John.
    Добавьте свойство surname со значением Smith.
    Измените значение свойства name на Pete.
    Удалите свойство name из объекта.*/


/*let user = {};
user['name'] = 'John'
user['surname'] = 'Smith'
user.name = 'Pete'
delete user.name;
console.log(user);*/
//2
// Напишите функцию isEmpty(obj), которая возвращает true, если у объекта нет свойств, иначе false.

/*let schedule = {};

function isEmpty(object) {
    for (let key in object) {
        if (key) {
            return false
        }
    }
    return true;
}

// schedule['5:00'] = 'подъём'
console.log(isEmpty(schedule))*/

//4
/*У нас есть объект, в котором хранятся зарплаты нашей команды:

    let salaries = {
        John: 100,
        Ann: 160,
        Pete: 130
    }
Напишите код для суммирования всех зарплат и сохраните результат в переменной sum. Должно получиться 390.

Если объект salaries пуст, то результат должен быть 0.*/

/*let salaries = {
    John: 100,
    Ann: 160,
    Pete: 130
}
let sumSalaries = function (salaries) {
    let sum = 0;
    for (let name in salaries) {
        sum += salaries[name];
    }
    return sum;
}
let sum = sumSalaries(salaries);*/


//5

/*Умножаем все числовые свойства на 2
важность: 3
Создайте функцию multiplyNumeric(obj), которая умножает все числовые свойства объекта obj на 2.

Например:

до вызова функции
    let menu = {
        width: 200,
        height: 300,
        title: "My menu"
    };

multiplyNumeric(menu);

после вызова функции
menu = {
    width: 400,
    height: 600,
    title: "My menu"
};
Обратите внимание, что multiplyNumeric не нужно ничего возвращать. Следует напрямую изменять объект.

    P.S. Используйте typeof для проверки, что значение свойства числовое.*/
/*function multiplyNumeric(obj) {
    for (let key in obj) {
        if (typeof obj[key] === "number") {
            obj[key] *= 2;
        }
    }
}

let menu = {
    width: 200,
    height: 300,
    title: "My menu"
};
multiplyNumeric(menu)
console.log(menu)*/
// 6

/*Создайте калькулятор
важность: 5
Создайте объект calculator (калькулятор) с тремя методами:

    read() (читать) запрашивает два значения и сохраняет их как свойства объекта.
sum() (суммировать) возвращает сумму сохранённых значений.
mul() (умножить) перемножает сохранённые значения и возвращает результат.
    let calculator = {
     ... ваш код ...
};

calculator.read();
alert( calculator.sum() );
alert( calculator.mul() );*/

/*const calc = {
    number1: 0,
    number2: 0,
    read() {
        this.number1 = Number(prompt('Enter the first number', 0));
        this.number2 = Number(prompt('Enter the second number', 0));
    },
    sum () {
        return this.number2 +this.number1
    },
    mult () {
        return this.number1 * this.number2
    }
}*/

// 7

/*Цепь вызовов
важность: 2
Это ladder (лестница) – объект, который позволяет подниматься вверх и спускаться:

    let ladder = {
        step: 0,
        up() {
            this.step++;
        },
        down() {
            this.step--;
        },
        showStep: function() {
            alert( this.step );
        }
    };
Теперь, если нам нужно сделать несколько последовательных вызовов, мы можем выполнить это так:

    ladder.up();
ladder.up();
ladder.down();
ladder.showStep(); // 1
Измените код методов up, down и showStep таким образом, чтобы их вызов можно было сделать по цепочке, например так:

    ladder.up().up().down().showStep();
Такой подход широко используется в библиотеках JavaScrip*/


/*let ladder = {
    step: 0,
    up() {
        this.step++;
        return this
    },
    down() {
        this.step--;
        return this
    },
    showStep: function() {
        alert( this.step );
        return this
    }
};*/


// 8

/*Создание калькулятора при помощи конструктора
важность: 5
Создайте функцию-конструктор Calculator, который создаёт объекты с тремя методами:

    read() запрашивает два значения при помощи prompt и сохраняет их значение в свойствах объекта.
sum() возвращает сумму введённых свойств.
mul() возвращает произведение введённых свойств.
    Например:

let calculator = new Calculator();
calculator.read();

alert( "Sum=" + calculator.sum() );
alert( "Mul=" + calculator.mul() );*/

/*function Calculator() {

    this.read = function () {
        this.number1 = Number(prompt('Enter the first number', 0));
        this.number2 = Number(prompt('Enter the second number', 0));
    }
    this.sum = function () {
        return this.number1 + this.number2
    }
    this.mult = function () {
        return this.number2 * this.number1
    }
}
let calc = new Calculator();*/

// 9

/*Создаём Accumulator
важность: 5
Напишите функцию-конструктор Accumulator(startingValue).

    Объект, который она создаёт, должен уметь следующее:

    Хранить «текущее значение» в свойстве value. Начальное значение устанавливается в аргументе конструктора startingValue.
    Метод read() использует prompt для получения числа и прибавляет его к свойству value.
    Таким образом, свойство value является текущей суммой всего, что ввёл пользователь при вызовах метода read(), с учётом начального значения startingValue.

    Ниже вы можете посмотреть работу кода:*/

/*function Accumulator (startingValue) {
    this.value = startingValue;
    this.read = function () {
        this.value += Number(prompt('Enter value', 0));
    }
}
let acc = new Accumulator(3);*/
/*let fruits = ["Яблоко", "Апельсин", "Слива"];
let count = 0;
/!*for (let fruit of fruits) {

    fruits[count] = "абрикос"
    count++;
}*!/

fruits.forEach((el) => {
    el = 1;
})*/
/*let arr = [];

function sumInput () {
    let result = 0;
    let count = 0;
    while (result !== null) {
        result = prompt('enter number', 0);
        if (result !== null) {
            arr[count] = result;
            count++;
        }
    }
}*/
/*let newArr = [];

let items = document.querySelectorAll('.item');
items.forEach((item, id) => {
    newArr.push(item)
});

let newArr2 = newArr.map((item, id) => {
    item.addEventListener('click', function () {
    this.style.color = 'black';
})
    if (id % 2 === 0) {
        return newArr[id].style.color = 'red';
    }
})*/

/*let arr = [{name: 'Alex', surname: 'Maz'}, {name: 'sergey', surname: 'em'}, {name: 'nik', surname: 'pal'}];
let newArr = arr.forEach(item => {
    item.surname = item.surname.toUpperCase()
})*/

/*const person = {
    name: 'Maxim',
    age: this.name,
    greet: function () {
        console.log('Greet')
        return this.age;

    }
}*/


/* arr = [1, -2, 3, 4, -9, -6];
let sum1 = 0, sum2 = 0, sum3 = 0;

function getMaxSubSum (arr) {
    for (let i = 0; i <= arr.length - 1; i++) {
        sum1 += arr[i];
        for (let j = i + 1; j <= arr.length - 1; j++) {
            sum2 += arr[j];
            if (sum2 > sum1) {
                sum3 = sum2
            } else {
                sum3 = sum1
                break
            }
            sum2 = 0;
        }
    }
} */
/*let cat = [];
fetch('./server/catalog.json')
.then((response) => {
    
    console.log(response)
    return response.json();
})
.then((body) => {
    cat = body
})*/
/*function myFunc () {
    console.log('привет')
}*/

/*class Animal {
    constructor(name, voice) {
        this.name = name;
        this.voice = voice;
    }
    say() {
        console.log(this.name, 'goes', this.voice);
    }
}
class Bird extends Animal{

}
let duck = new Bird('Duck', 'quack');*/
/*function User(n,a) {
    this.name = n;
    this.surmname = a;
    alert(new.target);
}

// без "new":
let user1 = User('a','b'); // undefined

// с "new":
let user2 = new User('a','v'); // function User { ... }*/
/*function fff(a) {
a.name=3;
    console.log(a, x)
}
let x =1;
let y = {
    name: 5
}*/
//Установка и уменьшение значения счётчика
/*
function makeCounter() {
    let counter = function () {
        return counter.count++;
    };
    counter.count = 0;
    counter.set = value => counter.count = value
    counter.decrease = function () {
        counter.count--;
    }
    return counter;
}

let c = makeCounter();
*/


/*function sum(a) {

    let currentSum = a;

    function f(b) {
        currentSum += b;
        return f;
    }

    f.toString = function() {
        return currentSum;
    };

    return f;
}
alert( sum(1)(2) ); // 3
alert( sum(5)(-1)(2) ); // 6
alert( sum(6)(-1)(-2)(-3) ); // 0
alert( sum(0)(1)(2)(3)(4)(5) ); // 15*/

/*function Foo(){}
function Bar(){}*/
/*let a = new Foo()
let b = new Bar()
Foo.prototype.toString = ()=> 'Olek';
Bar.prototype.toString = ()=> 'Alexey';
a + ' ' + b*/
/*const personMethod = {
    hello () {
    console.log('Hello', this)
}
}
function hello () {
console.log('Hello', this)
}
const person = {
    name: 'OleXander',
    city: 'Poznan',
    origin: "Kherson!!!",
    sayHello: function () {
         personMethod.hello.bind(this)()
    }
}
person.sayHello()*/
// function partial(func, ...argsBound) {
//     return function(...args) { // (*)
//         return func.call(this, ...argsBound, ...args);
//     }
// }

// использование:
// let user = {
//     firstName: "John",
//     say(time, phrase, phrase2) {
//         alert(`[${time}] ${this.firstName}: ${phrase}!${phrase2}`);
//     }
// };
//
// // добавляем частично применённый метод с фиксированным временем
// user.sayNow = partial(user.say, new Date().getHours() + ':' + new Date().getMinutes(), 'kazy-bazy');
//
// user.sayNow("Hello", "erferv");


// let func = function () {
//     let a = 3
//
//     return function (a,b) {
//         console.log(a+b)
//     }.bind(null, a)
//
// }
// let funcBind = func
// function askPassword(ok, fail) {
//     let password = prompt("Password?", '');
//     if (password == "rockstar") ok();
//     else fail();
// }
//
// let user = {
//     name: 'Вася',
//
//     loginOk() {
//         alert(`${this.name} logged in`);
//     },
//     loginFail() {
//         alert(`${this.name} failed to log in`);
//     },
// };
// askPassword(user.loginOk.bind(user), user.loginFail.bind(user));
// function someMethod() {
//     console.log(';lkj;loj')
// }
// let worker = {
//     someMethod() {
//         return 1;
//     },
//
//     slow(x) {
//         // здесь может быть страшно тяжёлая задача для процессора
//         alert("Called with " + x);
//         return x * this.someMethod(); // (*)
//     }
// };

// тот же код, что и выше
// function cachingDecorator(func) {
//     let cache = new Map();
//     return function(x) {
//         if (cache.has(x)) {
//             return cache.get(x);
//         }
//         let result = func(x); // (**)
//         cache.set(x, result);
//         return result;
//     };
// }
//
// alert( worker.slow(1) ); // оригинальный метод работает
//
// worker.slow = cachingDecorator(worker.slow); // теперь сделаем его кеширующим
//
// alert( worker.slow(2) )

//
// function printArgs() {
//     arguments.join = [].join; // одолжили метод (1)
//
//     var argStr = arguments.join(':'); // (2)
//
//     alert( argStr ); // сработает и выведет 1:2:3
// }
//
// printArgs(1, 2, 3,4, 5)
'use strict'
// const personMethod = {
//     hello() {
//         console.log('Hello', this)
//         return 2
//     }
// }
//
// function hello () {
//     console.log('Hello', this)
// }
// const person = {
//     name: 'OleXander',
//     city: 'Poznan',
//     origin: "Kherson!!!",
//     sayHello: personMethod.hello
// }
//
//
//  function calling(p) {
//      return function(){
//         let result = p.bind(this);
//          return result
//      }
//  }
// personMethod.hello = calling(personMethod.hello)
//
//
// let worker = {
//     someMethod() {
//         return 1;
//     },
//
//     slow(x) {
//         alert("Called with " + x);
//         return x * this.someMethod(); // (*)
//     }
// };
//
// function cachingDecorator(func) {
//     let cache = new Map();
//     return function(x) {
//         if (cache.has(x)) {
//             return cache.get(x);
//         }
//         let result = func(x);
//         console.log(this)
//         cache.set(x, result);
//         return result;
//     };
// }
//
// worker.slow = cachingDecorator(worker.slow);
// alert(worker.slow(2))

//
// function LateBloomer() {
//     this.petalCount = Math.ceil(Math.random() * 12) + 1;
// }
//
// // Объявляем цветение с задержкой в 1 секунду
// LateBloomer.prototype.bloom = function() {
//     window.setTimeout(this.declare.bind(this), 1000);
// };
//
// LateBloomer.prototype.declare = function() {
//     console.log('Я прекрасный цветок с ' +
//         this.petalCount + ' лепестками!');
// };
// let bloom = new LateBloomer();
// bloom.bloom()
// function log () {
//     console.log(this)
// }
// let dog = {
//     logDog: log,
// }
// let li = document.querySelectorAll('li');
// let count = 1;
// li.forEach(li => {
//     count++
//     setTimeout(() => {
//         li.style.background = 'red'
//     }, count*1000)
// })
//
// function multiply(a, b) {
//     'use strict'; // enable the strict mode
//     console.log(this === undefined); // => true
//     return a * b;
//   }
//   // multiply() function invocation with strict mode enabled
//   // this in multiply() is undefined
//   console.log(multiply(2, 5));

/*
class Animal {
    constructor(name, voice) {
        this.name = name;
        this.voice = voice;
        document.querySelector('.list').firstElementChild.style.background = 'red';
        this.say()
    }
    say() {
        console.log(`${this.name} say: ${this.voice}`)
    }
}
//let dog = new Animal('Dog', 'Wooof')
class Bird extends Animal {
    // constructor(name, voice, canFly) {
    //     super(name, voice);
    //     if (canFly) this.canFly = canFly;
    // }
}
class Bird2 extends Bird {
   constructor(name, voice) {
       super(name,voice)
       super.say();
   }
}
let colibri = new Bird2('Colibri', 'Chik-chirik')*/
// class  Player {
//     constructor(name, type) {
//         this.name = name;
//         this.type = type
//     }
//     introduce() {
//
//         console.log(`Hi I am ${this.name} I'm a ${this.type}`)
//     }
//
// }
// class Wizard1 extends Player{
// constructor() {
//     super();
// }
// }
// class Wizard2 extends Player {
//
// }
// let wizard1 = new Wizard1('Hillary', 'Healer')
// let wizard2 = new Wizard2('Hillary', 'Healer')

let input = document.querySelector("input");

const p = document.querySelector('p')

function inputHandler(event) {

    if (event.target.value) {
        let url = `https://api.github.com/search/users?q=${event.target.value}&per_page=100`
        fetch(url)
            .then(data => data.json())
            .then(data => {
                console.log(data)
                render(data.items)
            })
    } else ul.innerHTML = ''
}

input.addEventListener('keyup', debounce(inputHandler, 500))
const ul = document.querySelector('ul');

function render(dataArr) {
    ul.innerHTML = ''
    dataArr.forEach(item => {
        let li = document.createElement('li');
        let img = document.createElement('img')
        img.src = item.avatar_url;
        li.appendChild(img)
        ul.appendChild(li);
    })
}


function debounce(f, ms) {
    console.log('click')
    let isCooldown = false;
    return function () {
        if (isCooldown) return;
        f.apply(this, arguments);
        isCooldown = true;
        setTimeout(() => isCooldown = false, ms);
    };
}
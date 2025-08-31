// Typing basics

let title: string = "hello";
console.log(title);

function add(a: number, b: number): number {
    return a + b;
}

console.log(add(50, 40));

//Interfaces and Type ALiases


interface User {
    id: number;
    name: string;
}

type ID = string | number;


// classes

class Person {
    name: string;
    age: number;

    constructor(name: string, age: number) {
        this.name = name;
        this.age = age;
    }
}

const newPerson = new Person(
    "res", 109
)


console.log(newPerson);

// Decorators 





function Log(target: any, key: string) {
    console.log(`${key} called`);
}




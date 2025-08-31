// Typing basics
var title = "hello";
console.log(title);
function add(a, b) {
    return a + b;
}
console.log(add(50, 40));
// classes
var Person = /** @class */ (function () {
    function Person(name, age) {
        this.name = name;
        this.age = age;
    }
    return Person;
}());
var newPerson = new Person("res", 109);
console.log(newPerson);

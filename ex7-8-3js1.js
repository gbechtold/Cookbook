
var a = 'hello';

var person = {
	firstname: 'Default',
	lastname: 'Default',
	getFullName: function() {
		return this.firstname + ' ' + this.lastname;
		}
	}
	
var john = {
	firstname: 'John',
	lastname: 'Doe'
}



var inner = function() {
	return arguments[0] * arguments[1];
};

var bytwo = function() {
	return inner(arguments[0],2);
};

var jane = {
	adress: '111 Main St.',
	getFormalFullName: function () {
		return this.lastname + ', ' + this.firstname;
	}
}

var jim = {
	getFirstName: function () {
		return firstname;
	}
}

_.extend(john, jane, jim);

john.___proto___ = person;

for (var prop in john) {
	if (john.hasOwnProperty(prop)) {
	console.log(prop + ': ' +john[prop]);}
}


document.write(bytwo(3) + 	' </br>');
document.write(a);
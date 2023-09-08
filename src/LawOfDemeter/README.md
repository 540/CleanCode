# [The Law of Demeter](https://betterprogramming.pub/demeters-law-don-t-talk-to-strangers-87bb4af11694)

The Law of Demeter, also known as the Principle of Least Knowledge or Principle of Encapsulation, is a design principle
that emphasizes loose coupling between objects. Its main idea is that an object should have limited knowledge about the
internal structure of other objects and should only interact with its immediate "friends."

By following the Law of Demeter, developers can create more maintainable and flexible code by reducing the
interdependence between objects and improving encapsulation. This principle encourages a more modular and decoupled
design, leading to code that is easier to understand, modify, and test.

## Practical Example

In the example we have 3 classes.

1 - Delegation

2 - Branch Office

3 - Employee

### Delegation

Here we have an attribute that is an array of Branch Offices, and we have some functions you can use to interact with
the branch offices.

### Branch Office

Here we have an attribute that´s an array of Employees, and some functions you can use to interact with the Employees.

### Employee

It´s a simple class of an object with some attributes and functions.

## Error case

In two of delegation functions we are broking the Demeter´s Law:

getWeeklyWaste() ->

```
<?php
foreach ($this->getBranchOffices()[$i]->getEmployees() as $employee) {
    $amount = $amount + $employee->calculateEmployeeExpense();
}
```

getEmployeeNameWithMostSalary() ->
```
<?php
if (
    $this->getBranchOffices()[$i]->getEmployeeMoreExpensive()->calculateEmployeeExpense() >
    $branchMoreExpensive->getEmployeeMoreExpensive()->calculateEmployeeExpense()
) {
    $branchMoreExpensive = $this->branchOffices[$i];
}
```

Why? Because we are accesing to a property of a class from another class that is not immediate.

Can you fix it??
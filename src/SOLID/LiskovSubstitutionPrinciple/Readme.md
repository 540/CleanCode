# Liskov Substitution Principle

The Liskov Substitution Principle is one of the five fundamental principles of object-oriented programming (OOP) and software design. It was formulated by Barbara Liskov in 1987. This principle is one of the pillars of type theory in OOP and focuses on the relationship between classes and their subclasses.

Liskov's Substitution Principle states that subclasses should be substitutable for their base classes.

This means that since class B is a subclass of class A, we should be able to pass an object of class B to any method that expects an object of class A and the method should not give any strange results in that case.

This is the expected behavior, because when we use inheritance we assume that the child class inherits everything that the superclass has. The child class extends the behavior but never reduces it.

## ¿ What are the benefits of using the Liskov Substitution Principle ?

1 - It promotes coherence and consistency in class design, which makes code easier to understand and maintain.

2 - Contributes to code reuse, as derived classes can be used in place of base classes in different contexts without introducing unexpected bugs.

3 - It promotes a more robust and flexible design, which facilitates the extension and evolution of the software over time.

In short, Liskov's substitution principle is a valuable guide for the design of class hierarchies in object-oriented programming, improving software quality and reliability.

## Article
https://stackify.com/solid-design-liskov-substitution-principle/

## Error case

In the BranchOffice we are breaking the principle that objects of a subclass should be able to be replaced by objects of the superclass without affecting the code.

Can you fix it??
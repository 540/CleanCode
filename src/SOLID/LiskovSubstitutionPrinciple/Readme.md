# Liskov Substitution Principle

The Liskov Substitution Principle is one of the five fundamental principles of object-oriented programming (OOP) and software design, and was formulated by Barbara Liskov in 1987. This principle is one of the pillars of type theory in OOP and focuses on the relationship between classes and their subclasses.

Liskov's Substitution Principle states that subclasses should be substitutable for their base classes.

This means that since class B is a subclass of class A, we should be able to pass an object of class B to any method that expects an object of class A and the method should not give any strange results in that case.

This is the expected behavior, because when we use inheritance we assume that the child class inherits everything that the superclass has. The child class extends the behavior but never reduces it.

## Error case

In the BranchOffice we are breaking the principle that objects of a subclass should be able to be replaced by objects of the superclass without affecting the code.

Can you fix it??
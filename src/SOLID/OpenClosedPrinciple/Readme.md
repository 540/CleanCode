# [Open-Closed Principle](https://www.freecodecamp.org/news/open-closed-principle-solid-architecture-concept-explained/)

Open-Closed Principle (OCP): It is a guideline for the overall design of classes and interfaces and how developers 
can build code that allows change over time. 

By ensuring that your code is open to extension but closed to modification, you disallow future changes to existing classes 
and assemblies, which forces programmers to create new classes that can plug into the extension points.

## Error case

The BranchOffice is the responsible of starting the spring and let employees know that they can start developing. Right now, we have two types of developers, frontend and backend.

What could happen if we need to add new kind of developer? Are breaking any principle? :)

Can you fix it??

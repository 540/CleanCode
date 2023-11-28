# [Interface Segregation Principle](https://reflectoring.io/interface-segregation-principle/)

Segregation means keeping things separate, and the Interface Segregation Principle is about separating interfaces.

The principle states that many client-specific interfaces are better than one general-purpose interface. Clients should not be forced to implement a feature they don't need.

## Error case

In the employee interface we have several functions. This interface is extended in the different classes but not all classes need all functions.

Can you fix it?? 

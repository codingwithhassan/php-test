## Impact PHP Test

##### Implement the code for a checkout system that handles pricing schemes such as "apples cost 50p each or three apples cost 130p".

Implement the code for a supermarket checkout that calculates the total price of a number of items. In a normal supermarket, things are identified using Stock Keeping Units (or SKUs).

In our store, we'll use individual letters of the alphabet (A, B, C and so on..). Our goods are priced individually.

In addition, some items are multi-priced: buy N of them, and they'll cost you Y pence.

For example, item 'A' might cost 50p individually, but this week we have a special offer: buy three A's and they'll cost you 130p.

The prices are:

| SKU | Unit Price | Special Price |
|-----|------------|---------------|
|  A  |     50     |   3 for 130   |
|  B  |     30     |    2 for 45   |
|  C  |     20     |               |
|  D  |     15     |               |

The checkout should accept the items in any order, so that if we scan a B, an A and another B, it'll recognize the two B's and price them at 45p (for a total price of 95p).

The pricing rules change frequently, bear this in mind with your implementation.

Feel free to make changes in the existing code and architecture, and try to explain your reasoning for making changes.

If possible, we would want you to spend around an hour on the implementation, the purpose is to evaluate your ability in PHP and coding style preferences.
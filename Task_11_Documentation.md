# Task 11: Root Finding – Newton-Raphson and Secant Methods

## 1. Mathematical Concept

Newton-Raphson and Secant are numerical methods used to find the roots of mathematical equations. A root is a value of x that makes a function equal to zero.

**Newton-Raphson Method**

This method uses the function and its derivative to improve an initial estimate until it approaches the root.

The formula is:

x(n+1) = x(n) - f(x(n)) / f'(x(n))

**Secant Method**

The Secant method uses two initial estimates to calculate a new approximation. Unlike Newton-Raphson, it does not require calculating the derivative directly.

Both methods continue updating their estimates until the required accuracy is achieved.

## 2. Original Input Values and Operation

The function used in the program was:

f(x) = x³ - x - 2

For the Newton-Raphson method, the initial guess was 1.5.

The results were:
- Approximate root: 1.5213797068
- Function value at root: approximately 0.0000000000000453
- Number of iterations: 3

For the Secant method, the initial guesses were 1 and 2.

The results were:
- Approximate root: 1.5213797068
- Function value at root: approximately -0.0000000000000184
- Number of iterations: 7

Both methods produced almost identical roots, confirming that they successfully solved the equation.

## 3. Changing an Input Value

The initial guess for the Newton-Raphson method was changed from 1.5 to 2.0.

The new results were:
- New initial guess: 2.0
- Approximate root: 1.5213797068
- Function value at root: 0.0
- Number of iterations: 5

The final root remained almost the same, but the number of iterations increased from 3 to 5.

This demonstrates that the starting estimate can affect how quickly the Newton-Raphson method reaches a solution.

## 4. Real-World Application: Cube Volume Calculation

The program was modified to calculate the side length of a cube-shaped storage container with a required volume of 27 cubic metres.

The volume equation was:

V = s³

The equation was rearranged to:

s³ - 27 = 0

Newton-Raphson was then used to calculate the unknown side length.

The results were:
- Required volume: 27 cubic metres
- Calculated side length: 3.0 metres
- Verified volume: 27.0 cubic metres
- Number of iterations: 5

The result confirms that a cube with sides measuring 3 metres has a volume of 27 cubic metres.

## 5. Comparison of the Methods

Newton-Raphson required 3 iterations, while the Secant method required 7 iterations for the original equation.

Newton-Raphson was faster in this particular example because it used derivative information to improve its estimates. The Secant method also reached an accurate result without requiring a derivative.

The performance of both methods can vary depending on the function and the starting values.

## 6. Conclusion

The task demonstrated how Newton-Raphson and Secant methods can be used to solve nonlinear equations. Both methods produced accurate approximations of the root. Changing the initial guess affected the number of iterations required. The cube-volume application also showed how numerical methods can help solve practical engineering problems.
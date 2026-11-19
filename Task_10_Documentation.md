# Task 10: Root Finding – Bisection and Fixed-Point Methods

## 1. Mathematical Concept

Root finding is a numerical technique used to determine the value of an unknown variable that makes a mathematical function equal to zero.

This task focuses on two methods:

**Bisection Method**

The bisection method finds a root by repeatedly dividing an interval into two equal parts. It requires an interval where the function has opposite signs at the two endpoints. The interval is reduced until an approximate root is obtained.

**Fixed-Point Method**

The fixed-point method rearranges an equation into the form:

x = g(x)

It starts with an initial estimate and repeatedly substitutes the previous result into the equation until the difference between successive estimates becomes sufficiently small.

## 2. Original Input Values and Operation

The function used in the program was:

f(x) = x³ - x - 2

The initial interval for the bisection method was [1, 2].

The program repeatedly divided this interval to estimate the root.

The results were:

- Approximate root: 1.5213804245
- Function value at root: 0.0000042658
- Number of iterations: 20

The small function value indicates that the calculated root is close to the actual solution.

## 3. Changing an Input Value

The initial interval was changed from [1, 2] to [1.5, 2].

The new results were:

- Approximate root: 1.5213804245
- Function value at root: 0.0000042658
- Number of iterations: 19

The approximate root remained the same, but the number of iterations decreased from 20 to 19.

This happened because the new interval was narrower and still contained the root.

## 4. Fixed-Point Method Results

The original equation was rearranged into:

x = (x + 2)^(1/3)

An initial guess of 1.5 was used.

The results were:

- Approximate root: 1.5213796793
- Function value at root: -0.0000001637
- Number of iterations: 7

The method reached a result close to the bisection answer using fewer iterations for this example.

## 5. Real-World Application: Water Tank Dimensions

The program was modified to calculate the side length of a cube-shaped water tank that can hold 1,000 litres of water.

Since 1,000 litres is equivalent to 1 cubic metre, the volume equation was:

V = s³

Where:
- V represents the volume.
- s represents the side length of the tank.

The equation was rearranged as:

s³ - 1 = 0

The bisection method was then used with an interval of [0, 2].

The results were:

- Required volume: 1 cubic metre
- Calculated side length: 1.0 metre
- Verified volume: 1.0 cubic metre
- Number of iterations: 1

The result shows that a cube-shaped tank with a side length of one metre can hold 1,000 litres of water.

## 6. Conclusion

The task demonstrated how the bisection and fixed-point methods can be used to solve equations numerically. Both methods produced results close to the actual root of the original equation. Changing the starting interval affected the number of iterations required by the bisection method. The water tank example also demonstrated how root-finding techniques can be applied to practical engineering and measurement problems.
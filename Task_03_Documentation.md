# TASK 3: MATHEMATICAL FUNCTIONS AND VECTORIZATION

## 1. Objective
The objective of this task was to demonstrate mathematical functions and vectorization using Python and NumPy. The task compared ordinary Python loops with NumPy vectorized operations.

## 2. Original Problem
The program simulated a network monitoring system with one million network latency measurements. Each measurement was converted from milliseconds to seconds and squared.

## 3. Inputs and Mathematical Operations
- Number of measurements: 1,000,000.
- Network latency range: 5–250 milliseconds.
- Conversion: milliseconds divided by 1000.
- Mathematical operation: squaring each converted value.
- NumPy functions: uniform(), sin(), and cos().

## 4. Changing an Input
The number of measurements was reduced from 1,000,000 to 500,000.

This reduced the number of values processed by half while maintaining the same mathematical operations.

## 5. Output Interpretation
The ordinary Python loop took approximately 0.2532 seconds, while NumPy vectorization took approximately 0.0049 seconds.

The vectorized method was approximately 52.1 times faster in this test.

The trigonometric calculations also demonstrated that the sum of squared sine and cosine values was approximately one.

## 6. Modified Real-World Application
The program was modified to demonstrate audio signal processing.

An audio signal containing different amplitude values was created. The values were reduced by half and squared using NumPy vectorized operations.

This demonstrated how vectorization can process multiple audio samples efficiently.

## 7. Assumptions
- Network latency measurements were simulated.
- Latency values were generated between 5 and 250 milliseconds.
- Audio signal values were simulated.
- The execution time depended on the computer's processing speed.

## 8. Conclusion
The task demonstrated that NumPy mathematical functions and vectorization make numerical computations faster and easier to perform. Vectorized operations are useful when processing large datasets and applications such as network monitoring and audio processing.
# Task 2: NumPy Arrays and Numerical Computation

## 1. Objective
To use NumPy arrays to store temperature readings and perform numerical calculations efficiently.

## 2. Original problem
A weather station records 24 hourly temperatures in degrees Celsius. The program stores the readings in a NumPy array and calculates the daily mean, minimum and maximum temperatures. It also converts the readings from Celsius to Fahrenheit using the formula:

**F = 1.8C + 32**

## 3. Input values
The input consists of 24 hourly temperature readings:
18.5, 18.0, 17.8, 17.5, 17.9, 19.0, 21.5, 23.8, 25.6, 27.1, 28.3, 29.0, 29.4, 29.1, 28.5, 27.6, 26.2, 24.8, 23.4, 22.1, 21.0, 20.2, 19.6 and 19.0 degrees Celsius.

## 4. Mathematical operations performed
- `np.mean()` calculates the average temperature.
- `np.min()` identifies the lowest temperature.
- `np.max()` identifies the highest temperature.
- `1.8 * temperatures_c + 32` converts all readings to Fahrenheit in one operation.

## 5. Parameter/input change
The 13th temperature reading was changed from 29.4°C to 34.4°C. The program recalculates the mean, minimum and maximum values so that the effect of the changed input can be compared with the original results.

## 6. Modified related real-world application
The program was adapted for greenhouse temperature monitoring. Instead of the weather station's 24 hourly readings, it uses eight temperature readings collected at different monitoring periods inside a greenhouse. It calculates the average, minimum and maximum temperatures and converts all readings to Fahrenheit.

### Assumptions
- The eight readings are accurate measurements taken inside the same greenhouse during one monitoring period.
- The readings are measured in degrees Celsius.
- A maximum temperature of 30°C is used as the selected alert limit for this simple demonstration.

## 7. Output and interpretation
The program displays the average, lowest and highest temperatures for the original weather station data, the results after changing one input, and the greenhouse monitoring results. If the greenhouse maximum is above 30°C, the program displays a message suggesting ventilation. Otherwise, it reports that the readings are within the selected limit.

The changed weather-station reading increases the daily average and may change the maximum temperature. This demonstrates that changing an input value affects the numerical results. NumPy performs the calculations directly on the arrays without requiring a separate loop for each reading.

## 8. Conclusion
NumPy arrays provide a simple way to store groups of numerical measurements and perform calculations on them. The task demonstrates how mean, minimum, maximum and unit conversion operations can be applied to real-world temperature data.

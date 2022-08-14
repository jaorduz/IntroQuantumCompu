# Simulating Quantum Circuit using TensorFlow Quantum
Making a quantum circuit can be time-consuming, especially if too many qubits are involved, and the circuit is lengthy. To avoid the laborious process of building the circuits, we can use machine learning to design a machine learning model for such quantum circuits. Here we use Tensor flow quantum to simulate a custom quantum circuit that consists of several quantum gates.

# Tools and Libraries used:
- TensorFlow(2.7.0)
- TensorFlow Quantum(0.7.2)
- CIrq
- Sympy
- Numpy

# Summary
This is a tutorial to use Tensor Flow Quantum for simulating the Quantum circuit.
We create a TFQ Parametrized layer using the quantum circuit created by using Cirq and is trained and validated by the binary classical data which is converted in to Quantum data by using computational basis encoding.

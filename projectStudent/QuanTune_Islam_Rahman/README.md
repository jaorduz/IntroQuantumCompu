# Quantune: A quantum way to generate music

Researchers are attempting to make use of the ideas and algorithms that may be applied in the music business in order to benefit from the recent rapid advancements in quantum computing. 
As a result, the computational method of creating dynamic music has been integrated into the music industry. The Basak-Miranda method, which we determined to be the accepted practice 
for producing music, was used to construct a model in response to the rising need to establish a model for music composition. The use of computer logic and simulation in the development
of music has been extensively studied throughout the years. The first pitch recognition tool for playback was created by Geoff Hill. The ILLIAC computer, created by Hiller et al., 
can play a string quartet and is regarded as one of the first examples of algorithmic music computation. 

A deep neural network approach for tune automation that finally produces music was presented by Bretan et al. in 2009. The researchers' focus has recently switched to quantum simulation.
Because a note, the fundamental building block of music, may only exist in one state in conventional computers, superposition in quantum computing allows a note to exist in numerous states, 
accelerating simulation times. Miranda later produced utilizing a musical sequencer after Kirke et al. initially explored with sound and music using the quantum method. We discovered a 
lot less study on the quantum method of creating music, though.

In this project, we initially produced the frequency of the notes by superimposing the two notes. This was done only for experimental purposes with the created quantum music. 
The frequency of the notes and rhythms were then generated using the random walk technique. Finally, using these frequencies, we produced the midi file.

In the codebase folder, python implementation details have been provided for the above mentioned methods.

We also created a websited to experience the generated music. https://qtune.thepixel.men/

We used qiskit library for the quantum circuit. In one of the methods, we used IBM quantum computer and for the other one, we used local simulator.

# References<a name="references"></a>

[1] Qiskit [Library](https://qiskit.org/)

[2] IBM Quantum Computing [IBM](https://www.ibm.com/quantum)

[3] Guide to Unconventional Computing for Music [Book](https://link.springer.com/book/10.1007/978-3-319-49881-2)

[4] ArXiv [2110.12408](https://arxiv.org/abs/2110.12408)

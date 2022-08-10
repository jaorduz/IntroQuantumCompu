# Quantune: A quantum way to generate music

As quantum computing has recently advanced rapidly, researchers are trying to take advantage of the principles and algorithms they can utilize in the music industry. 
As a result, the computational approach to dynamic music creation has become an integral aspect of the music business. With the emerging need to establish a music 
composition model, we developed a model using the Basak-Miranda algorithm, which we found the standard convention for generating music. Over the years, there has been 
an enormous amount of study on music creation utilizing computer logic and simulation. Geoff Hill first produced a pitch identification tool for playback. Hiller et al. 
developed a computer named ILLIAC, which can comprise a string quartet, considered the pioneered works of algorithmic music computation. In 2009, Bretan et al. provided 
a deep neural network technique for tune automation which eventually generates music. The researchers recently shifted their interest to quantum simulation.
Because in classical computers, the note, which is the unit of a tune, can be only one state at a time, whereas in quantum computing using superposition,
a note can be at multiple states that speed up the simulation. Kirke et al. first experimented the sound and music by applying the quantum process, and Miranda later 
generated using the musical sequencer. However, we found significantly less research in music generation using the quantum process.

In this project, we first created frequency of notes by initializing two notes and taking the superposition of these two. This has been done to just experiment with
the generated quantum music. Then, we implemented the random walk algorithm to generate the frequencies of the notes and rythms. Finally we created the midi file from these
frequencies.

In the codebase folder, python implementation details have been provided for the above mentioned methods.

We also created a websited to experience the generated music. http://quantune.thepixel.men/

We used qiskit library for the quantum circuit. In one of the methods, we used IBM quantum computer and for the other one, we used local simulator.

# References<a name="references"></a>

[1] Qiskit [Library](https://qiskit.org/)

[2] IBM Quantum Computing [IBM](https://www.ibm.com/quantum)

[3] Guide to Unconventional Computing for Music [Book](https://link.springer.com/book/10.1007/978-3-319-49881-2)

[4] ArXiv [2110.12408](https://arxiv.org/abs/2110.12408)


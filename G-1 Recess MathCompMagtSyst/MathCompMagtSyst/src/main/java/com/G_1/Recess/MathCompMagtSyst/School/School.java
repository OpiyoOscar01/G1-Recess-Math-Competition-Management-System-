package com.G_1.Recess.MathCompMagtSyst.School;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import com.G_1.Recess.MathCompMagtSyst.SchoolRepresentative.SchRepresentative;
import jakarta.persistence.*;
import lombok.Data;

import java.util.List;

@Entity
@Data
@Table(name = "schools")
public class School {

@Id
@GeneratedValue(strategy = GenerationType.SEQUENCE)
private Long regNum;

private String name;
private String district;

//@OneToOne(mappedBy = "school")
//private SchRepresentative schRepresentative;
//
//// Uncommented and corrected the following lines:
//@OneToMany(mappedBy = "school", cascade = CascadeType.ALL, fetch = FetchType.LAZY)
//private List<Participant> participants;

// Getters and setters omitted for brevity
}


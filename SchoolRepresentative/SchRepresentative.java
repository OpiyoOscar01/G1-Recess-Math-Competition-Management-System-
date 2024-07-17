package com.G_1.Recess.MathCompMagtSyst.SchoolRepresentative;

import com.G_1.Recess.MathCompMagtSyst.School.School;
import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name="schoolrepresentatives")
@Data
public class SchRepresentative {
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long rep_id;
private String name;
private String email;
private String password;
@OneToOne
@JoinColumn(name = "school_regNum",referencedColumnName = "regNum")
private School school;
}
